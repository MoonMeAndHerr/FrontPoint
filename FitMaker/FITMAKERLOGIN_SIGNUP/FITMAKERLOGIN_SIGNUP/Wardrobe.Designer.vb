<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class Wardrobe
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()>
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Me.btnAddClothing = New System.Windows.Forms.Button()
        Me.pnlAddClothing = New System.Windows.Forms.Panel()
        Me.Label5 = New System.Windows.Forms.Label()
        Me.btnCancel = New System.Windows.Forms.Button()
        Me.btnSave = New System.Windows.Forms.Button()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.cmbColour = New System.Windows.Forms.ComboBox()
        Me.cmbStyle = New System.Windows.Forms.ComboBox()
        Me.cmbType = New System.Windows.Forms.ComboBox()
        Me.lblTopwear = New System.Windows.Forms.Label()
        Me.lblLongPants = New System.Windows.Forms.Label()
        Me.lblShorts = New System.Windows.Forms.Label()
        Me.lblHijab = New System.Windows.Forms.Label()
        Me.lblSkirt = New System.Windows.Forms.Label()
        Me.lblDresses = New System.Windows.Forms.Label()
        Me.flpTopwear = New System.Windows.Forms.FlowLayoutPanel()
        Me.pnlImageClothing = New System.Windows.Forms.Panel()
        Me.Label12 = New System.Windows.Forms.Label()
        Me.PictureBox1 = New System.Windows.Forms.PictureBox()
        Me.flpHijab = New System.Windows.Forms.FlowLayoutPanel()
        Me.flpShorts = New System.Windows.Forms.FlowLayoutPanel()
        Me.flpSkirt = New System.Windows.Forms.FlowLayoutPanel()
        Me.flpDresses = New System.Windows.Forms.FlowLayoutPanel()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.flpLongPants = New System.Windows.Forms.FlowLayoutPanel()
        Me.Panel2 = New System.Windows.Forms.Panel()
        Me.pnlAddClothing.SuspendLayout()
        Me.pnlImageClothing.SuspendLayout()
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.Panel2.SuspendLayout()
        Me.SuspendLayout()
        '
        'btnAddClothing
        '
        Me.btnAddClothing.FlatStyle = System.Windows.Forms.FlatStyle.System
        Me.btnAddClothing.Font = New System.Drawing.Font("Segoe UI", 10.2!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnAddClothing.Location = New System.Drawing.Point(28, 69)
        Me.btnAddClothing.Name = "btnAddClothing"
        Me.btnAddClothing.Size = New System.Drawing.Size(138, 35)
        Me.btnAddClothing.TabIndex = 1
        Me.btnAddClothing.Text = "+ Add Clothing"
        Me.btnAddClothing.UseVisualStyleBackColor = True
        '
        'pnlAddClothing
        '
        Me.pnlAddClothing.BackColor = System.Drawing.Color.FromArgb(CType(CType(141, Byte), Integer), CType(CType(123, Byte), Integer), CType(CType(104, Byte), Integer))
        Me.pnlAddClothing.Controls.Add(Me.Label5)
        Me.pnlAddClothing.Controls.Add(Me.btnCancel)
        Me.pnlAddClothing.Controls.Add(Me.btnSave)
        Me.pnlAddClothing.Controls.Add(Me.Label4)
        Me.pnlAddClothing.Controls.Add(Me.Label3)
        Me.pnlAddClothing.Controls.Add(Me.Label2)
        Me.pnlAddClothing.Controls.Add(Me.cmbColour)
        Me.pnlAddClothing.Controls.Add(Me.cmbStyle)
        Me.pnlAddClothing.Controls.Add(Me.cmbType)
        Me.pnlAddClothing.Location = New System.Drawing.Point(326, 130)
        Me.pnlAddClothing.Name = "pnlAddClothing"
        Me.pnlAddClothing.Size = New System.Drawing.Size(287, 293)
        Me.pnlAddClothing.TabIndex = 2
        Me.pnlAddClothing.Visible = False
        '
        'Label5
        '
        Me.Label5.BackColor = System.Drawing.Color.FromArgb(CType(CType(200, Byte), Integer), CType(CType(182, Byte), Integer), CType(CType(166, Byte), Integer))
        Me.Label5.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle
        Me.Label5.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label5.Location = New System.Drawing.Point(28, 19)
        Me.Label5.Name = "Label5"
        Me.Label5.Size = New System.Drawing.Size(233, 36)
        Me.Label5.TabIndex = 7
        Me.Label5.Text = "Add Clothing Panel"
        '
        'btnCancel
        '
        Me.btnCancel.FlatStyle = System.Windows.Forms.FlatStyle.System
        Me.btnCancel.Font = New System.Drawing.Font("Segoe UI", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnCancel.Location = New System.Drawing.Point(165, 230)
        Me.btnCancel.Name = "btnCancel"
        Me.btnCancel.Size = New System.Drawing.Size(95, 35)
        Me.btnCancel.TabIndex = 6
        Me.btnCancel.Text = "Cancel"
        Me.btnCancel.UseVisualStyleBackColor = True
        '
        'btnSave
        '
        Me.btnSave.FlatStyle = System.Windows.Forms.FlatStyle.System
        Me.btnSave.Font = New System.Drawing.Font("Segoe UI", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnSave.Location = New System.Drawing.Point(41, 230)
        Me.btnSave.Name = "btnSave"
        Me.btnSave.Size = New System.Drawing.Size(89, 35)
        Me.btnSave.TabIndex = 3
        Me.btnSave.Text = "Save"
        Me.btnSave.UseVisualStyleBackColor = True
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label4.ForeColor = System.Drawing.Color.White
        Me.Label4.Location = New System.Drawing.Point(52, 174)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(79, 25)
        Me.Label4.TabIndex = 5
        Me.Label4.Text = "Colour:"
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label3.ForeColor = System.Drawing.Color.White
        Me.Label3.Location = New System.Drawing.Point(52, 122)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(60, 25)
        Me.Label3.TabIndex = 4
        Me.Label3.Text = "Style:"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Font = New System.Drawing.Font("Segoe UI", 13.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label2.ForeColor = System.Drawing.Color.White
        Me.Label2.Location = New System.Drawing.Point(52, 72)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(59, 25)
        Me.Label2.TabIndex = 3
        Me.Label2.Text = "Type:"
        '
        'cmbColour
        '
        Me.cmbColour.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.cmbColour.Font = New System.Drawing.Font("Segoe UI", 9.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.cmbColour.FormattingEnabled = True
        Me.cmbColour.Items.AddRange(New Object() {"Black", "Blue", "Grey", "White", "Red", "Maroon", "Yellow", "Pink", "Purple"})
        Me.cmbColour.Location = New System.Drawing.Point(139, 174)
        Me.cmbColour.Name = "cmbColour"
        Me.cmbColour.Size = New System.Drawing.Size(106, 23)
        Me.cmbColour.TabIndex = 2
        '
        'cmbStyle
        '
        Me.cmbStyle.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.cmbStyle.Font = New System.Drawing.Font("Segoe UI", 9.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.cmbStyle.FormattingEnabled = True
        Me.cmbStyle.Items.AddRange(New Object() {"Casual", "Formal", "Sporty"})
        Me.cmbStyle.Location = New System.Drawing.Point(139, 122)
        Me.cmbStyle.Name = "cmbStyle"
        Me.cmbStyle.Size = New System.Drawing.Size(106, 23)
        Me.cmbStyle.TabIndex = 1
        '
        'cmbType
        '
        Me.cmbType.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.cmbType.Font = New System.Drawing.Font("Segoe UI", 9.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.cmbType.FormattingEnabled = True
        Me.cmbType.Items.AddRange(New Object() {"Topwear", "Long Pants", "Shorts", "Hijab", "Skirt", "Dresses"})
        Me.cmbType.Location = New System.Drawing.Point(139, 72)
        Me.cmbType.Name = "cmbType"
        Me.cmbType.Size = New System.Drawing.Size(106, 23)
        Me.cmbType.TabIndex = 0
        '
        'lblTopwear
        '
        Me.lblTopwear.AutoSize = True
        Me.lblTopwear.Font = New System.Drawing.Font("Segoe UI", 13.8!, CType((System.Drawing.FontStyle.Bold Or System.Drawing.FontStyle.Underline), System.Drawing.FontStyle), System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lblTopwear.Location = New System.Drawing.Point(32, 126)
        Me.lblTopwear.Name = "lblTopwear"
        Me.lblTopwear.Size = New System.Drawing.Size(88, 25)
        Me.lblTopwear.TabIndex = 2
        Me.lblTopwear.Text = "Topwear"
        Me.lblTopwear.Visible = False
        '
        'lblLongPants
        '
        Me.lblLongPants.AutoSize = True
        Me.lblLongPants.Font = New System.Drawing.Font("Segoe UI", 13.8!, CType((System.Drawing.FontStyle.Bold Or System.Drawing.FontStyle.Underline), System.Drawing.FontStyle), System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lblLongPants.Location = New System.Drawing.Point(32, 507)
        Me.lblLongPants.Name = "lblLongPants"
        Me.lblLongPants.Size = New System.Drawing.Size(112, 25)
        Me.lblLongPants.TabIndex = 3
        Me.lblLongPants.Text = "Long Pants"
        Me.lblLongPants.Visible = False
        '
        'lblShorts
        '
        Me.lblShorts.AutoSize = True
        Me.lblShorts.Font = New System.Drawing.Font("Segoe UI", 13.8!, CType((System.Drawing.FontStyle.Bold Or System.Drawing.FontStyle.Underline), System.Drawing.FontStyle), System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lblShorts.Location = New System.Drawing.Point(30, 899)
        Me.lblShorts.Name = "lblShorts"
        Me.lblShorts.Size = New System.Drawing.Size(70, 25)
        Me.lblShorts.TabIndex = 4
        Me.lblShorts.Text = "Shorts"
        Me.lblShorts.Visible = False
        '
        'lblHijab
        '
        Me.lblHijab.AutoSize = True
        Me.lblHijab.Font = New System.Drawing.Font("Segoe UI", 13.8!, CType((System.Drawing.FontStyle.Bold Or System.Drawing.FontStyle.Underline), System.Drawing.FontStyle), System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lblHijab.Location = New System.Drawing.Point(30, 1281)
        Me.lblHijab.Name = "lblHijab"
        Me.lblHijab.Size = New System.Drawing.Size(59, 25)
        Me.lblHijab.TabIndex = 5
        Me.lblHijab.Text = "Hijab"
        Me.lblHijab.Visible = False
        '
        'lblSkirt
        '
        Me.lblSkirt.AutoSize = True
        Me.lblSkirt.Font = New System.Drawing.Font("Segoe UI", 13.8!, CType((System.Drawing.FontStyle.Bold Or System.Drawing.FontStyle.Underline), System.Drawing.FontStyle), System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lblSkirt.Location = New System.Drawing.Point(30, 1679)
        Me.lblSkirt.Name = "lblSkirt"
        Me.lblSkirt.Size = New System.Drawing.Size(55, 25)
        Me.lblSkirt.TabIndex = 6
        Me.lblSkirt.Text = "Skirt"
        Me.lblSkirt.Visible = False
        '
        'lblDresses
        '
        Me.lblDresses.AutoSize = True
        Me.lblDresses.Font = New System.Drawing.Font("Segoe UI", 13.8!, CType((System.Drawing.FontStyle.Bold Or System.Drawing.FontStyle.Underline), System.Drawing.FontStyle), System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lblDresses.Location = New System.Drawing.Point(32, 2070)
        Me.lblDresses.Name = "lblDresses"
        Me.lblDresses.Size = New System.Drawing.Size(78, 25)
        Me.lblDresses.TabIndex = 7
        Me.lblDresses.Text = "Dresses"
        Me.lblDresses.Visible = False
        '
        'flpTopwear
        '
        Me.flpTopwear.AutoSize = True
        Me.flpTopwear.Location = New System.Drawing.Point(36, 166)
        Me.flpTopwear.Name = "flpTopwear"
        Me.flpTopwear.Size = New System.Drawing.Size(884, 306)
        Me.flpTopwear.TabIndex = 8
        Me.flpTopwear.WrapContents = False
        '
        'pnlImageClothing
        '
        Me.pnlImageClothing.Controls.Add(Me.Label12)
        Me.pnlImageClothing.Controls.Add(Me.PictureBox1)
        Me.pnlImageClothing.Location = New System.Drawing.Point(650, 69)
        Me.pnlImageClothing.Name = "pnlImageClothing"
        Me.pnlImageClothing.Size = New System.Drawing.Size(213, 300)
        Me.pnlImageClothing.TabIndex = 0
        Me.pnlImageClothing.Visible = False
        '
        'Label12
        '
        Me.Label12.Font = New System.Drawing.Font("Segoe UI", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label12.Location = New System.Drawing.Point(18, 240)
        Me.Label12.Name = "Label12"
        Me.Label12.Size = New System.Drawing.Size(175, 48)
        Me.Label12.TabIndex = 1
        Me.Label12.Text = "Label12"
        Me.Label12.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'PictureBox1
        '
        Me.PictureBox1.Location = New System.Drawing.Point(13, 13)
        Me.PictureBox1.Name = "PictureBox1"
        Me.PictureBox1.Size = New System.Drawing.Size(186, 217)
        Me.PictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom
        Me.PictureBox1.TabIndex = 0
        Me.PictureBox1.TabStop = False
        '
        'flpHijab
        '
        Me.flpHijab.AutoSize = True
        Me.flpHijab.Location = New System.Drawing.Point(34, 1333)
        Me.flpHijab.Name = "flpHijab"
        Me.flpHijab.Size = New System.Drawing.Size(884, 306)
        Me.flpHijab.TabIndex = 9
        Me.flpHijab.WrapContents = False
        '
        'flpShorts
        '
        Me.flpShorts.AutoSize = True
        Me.flpShorts.Location = New System.Drawing.Point(34, 940)
        Me.flpShorts.Name = "flpShorts"
        Me.flpShorts.Size = New System.Drawing.Size(884, 306)
        Me.flpShorts.TabIndex = 10
        Me.flpShorts.WrapContents = False
        '
        'flpSkirt
        '
        Me.flpSkirt.AutoSize = True
        Me.flpSkirt.Location = New System.Drawing.Point(36, 1726)
        Me.flpSkirt.Name = "flpSkirt"
        Me.flpSkirt.Size = New System.Drawing.Size(884, 306)
        Me.flpSkirt.TabIndex = 10
        Me.flpSkirt.WrapContents = False
        '
        'flpDresses
        '
        Me.flpDresses.AutoSize = True
        Me.flpDresses.Location = New System.Drawing.Point(36, 2116)
        Me.flpDresses.Name = "flpDresses"
        Me.flpDresses.Size = New System.Drawing.Size(884, 306)
        Me.flpDresses.TabIndex = 11
        Me.flpDresses.WrapContents = False
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Font = New System.Drawing.Font("Segoe UI", 19.8!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label1.ForeColor = System.Drawing.Color.White
        Me.Label1.Location = New System.Drawing.Point(375, 0)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(194, 37)
        Me.Label1.TabIndex = 1
        Me.Label1.Text = "My Wardrobe"
        '
        'flpLongPants
        '
        Me.flpLongPants.AutoSize = True
        Me.flpLongPants.Location = New System.Drawing.Point(34, 550)
        Me.flpLongPants.Name = "flpLongPants"
        Me.flpLongPants.Size = New System.Drawing.Size(884, 306)
        Me.flpLongPants.TabIndex = 9
        Me.flpLongPants.WrapContents = False
        '
        'Panel2
        '
        Me.Panel2.BackColor = System.Drawing.Color.FromArgb(CType(CType(162, Byte), Integer), CType(CType(137, Byte), Integer), CType(CType(115, Byte), Integer))
        Me.Panel2.Controls.Add(Me.Label1)
        Me.Panel2.Dock = System.Windows.Forms.DockStyle.Top
        Me.Panel2.Font = New System.Drawing.Font("Segoe UI", 7.8!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Panel2.Location = New System.Drawing.Point(0, 0)
        Me.Panel2.Name = "Panel2"
        Me.Panel2.Size = New System.Drawing.Size(1104, 48)
        Me.Panel2.TabIndex = 12
        '
        'Wardrobe
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 12.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.AutoScroll = True
        Me.BackColor = System.Drawing.Color.FromArgb(CType(CType(250, Byte), Integer), CType(CType(245, Byte), Integer), CType(CType(239, Byte), Integer))
        Me.ClientSize = New System.Drawing.Size(1121, 600)
        Me.Controls.Add(Me.pnlAddClothing)
        Me.Controls.Add(Me.lblLongPants)
        Me.Controls.Add(Me.pnlImageClothing)
        Me.Controls.Add(Me.lblDresses)
        Me.Controls.Add(Me.lblHijab)
        Me.Controls.Add(Me.lblSkirt)
        Me.Controls.Add(Me.lblShorts)
        Me.Controls.Add(Me.lblTopwear)
        Me.Controls.Add(Me.btnAddClothing)
        Me.Controls.Add(Me.flpTopwear)
        Me.Controls.Add(Me.flpLongPants)
        Me.Controls.Add(Me.flpShorts)
        Me.Controls.Add(Me.flpHijab)
        Me.Controls.Add(Me.flpDresses)
        Me.Controls.Add(Me.flpSkirt)
        Me.Controls.Add(Me.Panel2)
        Me.Font = New System.Drawing.Font("Segoe UI", 7.8!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None
        Me.Name = "Wardrobe"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        Me.Text = "Wardrobe"
        Me.pnlAddClothing.ResumeLayout(False)
        Me.pnlAddClothing.PerformLayout()
        Me.pnlImageClothing.ResumeLayout(False)
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.Panel2.ResumeLayout(False)
        Me.Panel2.PerformLayout()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents btnAddClothing As Button
    Friend WithEvents pnlAddClothing As Panel
    Friend WithEvents cmbStyle As ComboBox
    Friend WithEvents cmbType As ComboBox
    Friend WithEvents Label5 As Label
    Friend WithEvents btnCancel As Button
    Friend WithEvents btnSave As Button
    Friend WithEvents Label4 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents cmbColour As ComboBox
    Friend WithEvents lblTopwear As Label
    Friend WithEvents lblLongPants As Label
    Friend WithEvents lblShorts As Label
    Friend WithEvents lblHijab As Label
    Friend WithEvents lblSkirt As Label
    Friend WithEvents lblDresses As Label
    Friend WithEvents flpTopwear As FlowLayoutPanel
    Friend WithEvents flpHijab As FlowLayoutPanel
    Friend WithEvents flpShorts As FlowLayoutPanel
    Friend WithEvents flpSkirt As FlowLayoutPanel
    Friend WithEvents flpDresses As FlowLayoutPanel
    Friend WithEvents Label1 As Label
    Friend WithEvents flpLongPants As FlowLayoutPanel
    Friend WithEvents Panel2 As Panel
    Friend WithEvents pnlImageClothing As Panel
    Friend WithEvents Label12 As Label
    Friend WithEvents PictureBox1 As PictureBox
End Class
